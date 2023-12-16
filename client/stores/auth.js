import {defineStore} from 'pinia'
import axios from 'axios'

export const useAuthStore = defineStore('auth', {
  state: () => {
    return {
      token: null,
      admin_token: null,
      user: null,
    }
  },
  getters: {
    check: (state) => (state.user !== null && state.user !== undefined),
    isImpersonating: (state) => (state.admin_token !== null && state.admin_token !== undefined)
  },
  actions: {
    // Stores admin token temporarily for impersonation
    startImpersonating() {
      this.setAdminToken(this.token)
    },
    // Stop admin impersonation
    stopImpersonating() {
      this.token = this.admin_token
      this.admin_token = null
      this.fetchUser()
    },

    setToken(token) {
      this.setCookie('token', token)
      this.token = token
    },

    setAdminToken(token) {
      this.setCookie('admin_token', token)
      this.admin_token = token
    },

    setCookie(name, value) {
      if (process.client) {
        useCookie(name).value = value
      }
    },

    initStore(token, adminToken) {
      this.token = token
      this.admin_token = adminToken
    },

    setUser(user) {
      if (!user) {
        console.error('Error.setting.user')
        this.setToken(null)
      }

      this.user = user
      this.initServiceClients()
    },

    updateUser(payload) {
      this.user = payload
      this.initServiceClients()
    },

    initServiceClients() {
      if (!this.user) return
      useAmplitude().setUser(this.user)
      useCrisp().setUser(this.user)

      // Init sentry
      // console.log(process)
      // $sentry.configureScope((scope) => {
      //   scope.setUser({
      //     id: this.user.id,
      //     email: this.user.email,
      //     subscription: this.user?.is_subscribed
      //   })
      // })
    },

    async logout() {
      try {
        await axios.post('/api/logout')
      } catch (e) {
      }

      this.user = null
      this.setToken(null)
    },

    async fetchOauthUrl(provider) {
      const {data} = await axios.post(`/api/oauth/${provider}`)
      return data.url
    }
  }
})
