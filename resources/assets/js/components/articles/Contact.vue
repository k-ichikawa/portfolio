<template>
    <div class="articleBox">
        <article>
            <h1>CONTACT</h1>
            <div class="explain">
                <span v-if="is_error" style="color: #DC143C">※正しく入力をお願いいたします。</span>
                <div class="name">
                    <h3>お名前</h3>
                    <input type="text" v-model="name" class="inputText">
                    <span v-if="hasError('name')" style="color: #DC143C">{{ getError('name') }}</span>
                </div>
                <div class="mailAddress">
                    <h3>メールアドレス</h3>
                    <input type="email" v-model="mail_address" class="inputText">
                    <span v-if="hasError('mail_address')" style="color: #DC143C">{{ getError('mail_address') }}</span>
                </div>
                <div class="message">
                    <h3>メッセージ</h3>
                    <textarea rows="3" v-model="message"></textarea>
                    <span v-if="hasError('message')" style="color: #DC143C">{{ getError('message') }}</span>
                </div>
                <div class="submitButton">
                    <input type="submit" value="送信" class="button" v-on:click.prevent="sendMessage">
                </div>
                <p v-if="is_success" style="color: #008000;">お問い合わせありがとうございました。順次回答しますので、しばらくお待ち下さいませ。</p>
                <p v-else-if="is_system_error" style="color: #DC143C;">システムエラーが発生しました。<br>申し訳ございませんが、しばらくお待ちいただいた再度お試しいただくか、別の連絡手段をご利用くださいませ。</p>
            </div>
        </article>
    </div>
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
                'is_system_error': false,
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
                this.is_system_error = false;
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
                    } else if (res.data.result == false) {
                        this.is_system_error = true;
                    }
                }).catch(res => {
                    this.error_messages = res.response.data.errors;
                    this.is_error = true;
                    if (res.data.result == false) {
                        this.is_system_error = true;
                    }
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