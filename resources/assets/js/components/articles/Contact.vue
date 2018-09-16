<template>
    <section>
        <div>
            <div class="fields">
                <span v-if="is_error" style="color: #DC143C">※正しく入力をお願いいたします。</span>
                <div class="field" style="margin-bottom: 10px">
                    <label for="name">Name</label>
                    <input type="text" v-model="name" id="name">
                    <span v-if="hasError('name')" style="color: #DC143C">{{ getError('name') }}</span>
                </div>
                <div class="field" style="margin-bottom: 10px">
                    <label for="email">Email</label>
                    <input type="email" v-model="mail_address" id="email">
                    <span v-if="hasError('mail_address')" style="color: #DC143C">{{ getError('mail_address') }}</span>
                </div>
                <div class="field" style="margin-bottom: 10px">
                    <label for="message">Message</label>
                    <textarea v-model="message" id="message" rows="3"></textarea>
                    <span v-if="hasError('message')" style="color: #DC143C">{{ getError('message') }}</span>
                </div>
                <p v-if="is_success" style="color: #008000;">お問い合わせありがとうございました。順次回答しますので、しばらくお待ち下さいませ。</p>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Send Message" v-on:click.prevent="sendMessage"></li>
            </ul>
        </div>
    </section>
</template>

<script>
    import Vue from 'vue'
    import axios from 'axios'
    import VueAxios from 'vue-axios'

    Vue.use(VueAxios, axios);

    export default {
        name: "Contact",
        data () {
            return {
                'name': '',
                'mail_address': '',
                'message': '',
                'is_success': false,
                'is_error': false,
                'error_messages': []
            }
        },
        mounted() {
            this.is_success = false;
            this.is_error = false;
        },
        methods: {
            sendMessage() {
                let apiName = '/send-message';
                this.is_success = false;
                this.is_error = false;
                this.error_messages = [];

                axios.post(apiName, {
                    name: this.name,
                    mail_address: this.mail_address,
                    message: this.message
                }).then((res) => {
                    if (res.data.result == true) {
                        this.name = '';
                        this.mail_address = '';
                        this.message = '';
                        this.is_success = true;
                    }
                }).catch(res => {
                    this.error_messages = res.response.data.errors;
                    this.is_error = true;
                });
            },
            hasError(field) {
                return (this.error_messages != null) && this.error_messages.hasOwnProperty(field);
            },
            getError(field) {
                return this.hasError(field) ? this.error_messages[field][0] : '';
            }
        }
    }
</script>

<style scoped>

</style>