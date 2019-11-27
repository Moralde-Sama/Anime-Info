export class ModalController {
    constructor(modal_behavior) {
        this.modal_behavior = modal_behavior;
    }
    showModal() {
        this.modal_behavior.showModal();
    }
    closeModal() {
        this.modal_behavior.closeModal();
    }
}
