import { ModalController } from './classes/modal.js';
import {SignInModal} from './classes/SignInModal.js';

const modal = new ModalController(new SignInModal());

document.getElementById('signIn').onclick = function() {
    modal.showModal();
}

document.getElementById('modal_close').onclick = function() {
    modal.closeModal();
}
