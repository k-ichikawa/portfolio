<template>
    <div>
        <div class="articleBox">
            <article>
                <h1>PRIVATE</h1>
                <div class="explain">
                    <h2>プライベートの略歴</h2>
                    <ul class="timeline">
                        <li>
                            <p class="timeline-date">1999年4月</p>
                            <div class="timeline-content">
                                <h3>小学生時代</h3>
                                <p>ポケモンを通じて初めて友達が出来る。<br>野球をするのが好きだった。</p>
                            </div>
                        </li>
                        <li>
                            <p class="timeline-date">2005年4月</p>
                            <div class="timeline-content">
                                <h3>中学生時代</h3>
                                <p>そこそこセンスがあったため、卓球部に入る。レギュラーなのに緊張体質で試合で勝てず。<br>家にPCが導入され、ブログや掲示板等、世の中に発信することを覚える。<br>カードゲームやテレビゲームにドハマり<br>奇跡的に彼女が出来る。</p>
                            </div>
                        </li>
                        <li>
                            <p class="timeline-date">2008年4月</p>
                            <div class="timeline-content">
                                <h3>高校生時代</h3>
                                <p><a href="https://ws-tcg.com/" target="_blank">ヴァイスシュヴァルツ</a>、<a href="http://www.capcom.co.jp/monsterhunter/P2ndG/" target="_blank">モンスターハンター2ndG</a>に明け暮れる。<br>Perfumeにハマり、ライブに行くようになる。</p>
                            </div>
                        </li>
                        <li>
                            <p class="timeline-date">2011年4月</p>
                            <div class="timeline-content">
                                <h3>大学生時代（前）</h3>
                                <p>大学までが遠いため、学内でカードゲームをしたくなりサークルを立ち上げる。<br>カードゲーム、アルバイト、アニメを繰り返す毎日</p>
                            </div>
                        </li>
                        <li>
                            <p class="timeline-date">2013年4月</p>
                            <div class="timeline-content">
                                <h3>大学生時代（後）</h3>
                                <p>アルバイトやインターン、ゼミなどで異性との交流が増え、髪型や服装を気にし始める。</p>
                            </div>
                        </li>
                        <li>
                            <p class="timeline-date">2016年4月</p>
                            <div class="timeline-content">
                                <h3>社会人〜現在</h3>
                                <p>暇があるとカードゲームとyoutube視聴とスプラトゥーンのどれかをしている。<br>日本語ラップにハマっている。</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="explain">
                    <h2>Recently Instagram Photos</h2>
                    <p v-if="is_system_error" style="color: #DC143C">エラーが発生しました。しばらくお待ちください。</p>
                    <ul class="photoList">
                        <li v-for="image in images">
                            <a :href="image.post_url" class="imageLink" target="_blank">
                                <img :src="image.post_image_url" alt="">
                                <div class="text">
                                    {{ image.text }}
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    </div>
</template>

<script>
    import Vue from 'vue'
    import axios from 'axios'
    import VueAxios from 'vue-axios'

    Vue.use(VueAxios, axios);

    export default {
        name: "Private",
        data() {
            return {
                is_system_error: false,
                'images': []
            }
        },
        mounted() {
            this.fetchInstagramImages()
        },
        methods: {
            fetchInstagramImages() {
                let apiName = '/get-instagram-images';
                this.is_system_error = false;
                axios.get(apiName).then((res) => {
                    this.images = res.data;
                }).catch(res => {
                    this.is_system_error = true;
                });
            },
        }
    }
</script>