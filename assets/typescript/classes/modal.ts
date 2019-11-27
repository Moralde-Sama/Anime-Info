import { IModalBehavior } from '../interfaces/IModalBehavior';
export class ModalController implements IModalBehavior {
    private modal_behavior: IModalBehavior;

    constructor(modal_behavior: IModalBehavior) {
        this.modal_behavior = modal_behavior;
    }

    showModal(): void {
        this.modal_behavior.showModal();
    }
    closeModal(): void {
        this.modal_behavior.closeModal();
    }
}