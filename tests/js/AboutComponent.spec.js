import Vue from 'vue'
import ContactComponent from '../../resources/assets/js/components/articles/About.vue';

function renderComponent(Component, props) {
    const Ctor = Vue.extend(Component)
    const vm = new Ctor(props).$mount()
    return vm;
}

describe('ContactComponent', () => {
    it('should have data method', function () {
        expect(typeof ContactComponent.data).toBe('function')
    });
    it('should have right template', () => {
        const vm = renderComponent(ContactComponent, {})
        expect(vm.$el.textContent).toContain('ABOUT');
    });
    it('should contain which is SKILL', () => {
        const vm = renderComponent(ContactComponent, {})
        expect(vm.$el.textContent).toContain('Skill');
    });
});