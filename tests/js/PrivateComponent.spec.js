import Vue from 'vue'
import ContactComponent from '../../resources/assets/js/components/articles/Private.vue';

function renderComponent(Component, props) {
    const Ctor = Vue.extend(Component)
    const vm = new Ctor(props).$mount()
    return vm;
}

describe('ContactComponent', () => {
    it('should have data method', function () {
        expect(typeof ContactComponent.mounted).toBe('function')
    });
    it('should have data data', function () {
        expect(typeof ContactComponent.data).toBe('function')
    });
    it('should have data fetchInstagramImages', function () {
        expect(typeof ContactComponent.methods.fetchInstagramImages).toBe('function')
    });

    it('should have right template', () => {
        const vm = renderComponent(ContactComponent, {})
        expect(vm.$el.textContent).toContain('PRIVATE');
    });
    it('should contain which is SKILL', () => {
        const vm = renderComponent(ContactComponent, {})
        expect(vm.$el.textContent).toContain('プライベートの略歴');
    });
    it('should contain which is Recently Instagram Photos', () => {
        const vm = renderComponent(ContactComponent, {})
        expect(vm.$el.textContent).toContain('Recently Instagram Photos');
    });

});