export class SignInModal {
    constructor() {
        this.modal = document.getElementById('myModal');
    }
    showModal() {
        this.modal.style.display = 'block';
        this.modal.classList.remove('hide');
        this.modal.classList.add('show');
    }
    closeModal() {
        this.modal.classList.remove('show');
        this.modal.classList.add('hide');
        setTimeout(() => {
            this.modal.style.display = 'none';
        }, 500);
    }
}
