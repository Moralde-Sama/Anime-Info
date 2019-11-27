import { IModalBehavior } from '../interfaces/IModalBehavior';

export class SignInModal implements IModalBehavior {
    private readonly modal = document.getElementById('myModal');
    showModal(): void {
        this.modal.style.display = 'block';
    }
    closeModal(): void {
        this.modal.style.display = 'none';
    }


}