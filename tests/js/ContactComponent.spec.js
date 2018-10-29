import Vue from 'vue'
import ContactComponent from '../../resources/assets/js/components/articles/Contact.vue';

function renderComponent(Component, props) {
    const Ctor = Vue.extend(Component)
    const vm = new Ctor(props).$mount()
    return vm;
}

describe('ContactComponent', () => {
    it('should have mounted method', function () {
        expect(typeof ContactComponent.mounted).toBe('function')
    });
    it('should have data method', function () {
        expect(typeof ContactComponent.mounted).toBe('function')
    });
    it('should have methods method', function () {
        expect(typeof ContactComponent.mounted).toBe('function')
    });
    it('should have sendMessage method', function () {
        expect(typeof ContactComponent.methods.sendMessage).toBe('function')
    });
    it('should have hasError method', function () {
        expect(typeof ContactComponent.methods.hasError).toBe('function')
    });
    it('should have getError method', function () {
        expect(typeof ContactComponent.methods.getError).toBe('function')
    });

    it('should have right template', () => {
        const vm = renderComponent(ContactComponent, {})
        expect(vm.$el.textContent).toContain('CONTACT');
    });
    it('should contain which is お名前', () => {
        const vm = renderComponent(ContactComponent, {})
        expect(vm.$el.textContent).toContain('お名前（姓）');
    });
    it('should contain which is お名前', () => {
        const vm = renderComponent(ContactComponent, {})
        expect(vm.$el.textContent).toContain('お名前（名）');
    });
    it('should contain which is メールアドレス', () => {
        const vm = renderComponent(ContactComponent, {})
        expect(vm.$el.textContent).toContain('メールアドレス');
    });
    it('should contain which is メッセージ', () => {
        const vm = renderComponent(ContactComponent, {})
        expect(vm.$el.textContent).toContain('メッセージ');
    });
});