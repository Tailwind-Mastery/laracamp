import './bootstrap';

import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.store('web', {

    loginModal: false,
    registerModal: false,
    
    toggleLogin() {
        this.loginModal = ! this.loginModal
        this.registerModal = false
    },
    toggleRegister() {
        this.loginModal = false
        this.registerModal = ! this.registerModal
    }
})

Alpine.start()