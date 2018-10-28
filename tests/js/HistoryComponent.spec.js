import Vue from 'vue'
import ContactComponent from '../../resources/assets/js/components/articles/History.vue';

function renderComponent(Component, props) {
    const Ctor = Vue.extend(Component)
    const vm = new Ctor(props).$mount()
    return vm;
}

describe('ContactComponent', () => {
    it('should have right template', () => {
        const vm = renderComponent(ContactComponent, {})
        expect(vm.$el.textContent).toContain('HISTORY');
    });
    it('should contain which is SKILL', () => {
        const vm = renderComponent(ContactComponent, {})
        expect(vm.$el.textContent).toContain('学歴・職歴');
    });
});