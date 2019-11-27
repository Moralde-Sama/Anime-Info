export class SignInModal {
    constructor() {
        this.modal = document.getElementById('myModal');
    }
    showModal() {
        this.modal.style.display = 'block';
    }
    closeModal() {
        this.modal.style.display = 'none';
    }
}
