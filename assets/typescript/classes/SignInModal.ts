import { IModalBehavior } from '../interfaces/IModalBehavior';

export class SignInModal implements IModalBehavior {
    private readonly modal = document.getElementById('myModal');
    showModal(): void {
        this.modal.style.display = 'block';
        this.modal.classList.remove('hide');
        this.modal.classList.add('show');
    }
    closeModal(): void {
        this.modal.classList.remove('show');
        this.modal.classList.add('hide');
        setTimeout(() => {
            this.modal.style.display = 'none';
        }, 500);
    }


}