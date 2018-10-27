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
    it('should have right template', () => {
        const vm = renderComponent(ContactComponent, {})
        expect(vm.$el.textContent).toContain('CONTACT');
    });
});