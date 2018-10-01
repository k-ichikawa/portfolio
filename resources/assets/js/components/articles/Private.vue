<template>
    <div>
        <article>
            <h2>PRIVATE BIOGRAPHY</h2>

            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>小学生時代</td>
                        <td>家でポケモンをやるか、外で野球をするだけの毎日。人見知り。</td>
                    </tr>
                    <tr>
                        <td>中学生時代</td>
                        <td>卓球部に入りレギュラーを勝ち取るも、緊張体質のため大会で結果を残せず。
                            <br />戦国BASARAやドラクエにハマり徹ゲーを覚えてしまう。
                            <br />デュエルマスターズにもハマり、カードゲームの楽しさを知る。
                            <br />家にPCが導入され没頭。ブログや掲示板等、世の中に発信することを覚える。
                            <br />Perfumeにハマる。
                        </td>
                    </tr>
                    <tr>
                        <td>高校生時代</td>
                        <td>アルバイトが出来るようになり、アニメ・ゲームへの没頭が加速。
                            <br />アニメのキャラクターがカードゲームになっているヴァイスシュヴァルツにドハマり。
                            <br />遊ぶために指定校推薦を取り、オタクのまま大学デビューをしてしまう。
                        </td>
                    </tr>
                    <tr>
                        <td>大学生時代（前）</td>
                        <td>私立文系大学の単位の取りやすさを知ってしまい、アルバイトとカードゲームとアニメを繰り返す毎日。
                            <br />大学までが遠いため、大学内でカードゲームをしたくなりサークルを立ち上げる。
                        </td>
                    </tr>
                    <tr>
                        <td>大学生時代（後）</td>
                        <td>
                            アルバイト先に同年代の異性が多かったこともあり、やっとこさ色気付いて、人並みのファッションや髪型に興味を持つ。
                            <br />FacebookやInstagramで友達を増やしまくり人並みのアピールをし始める。
                        </td>
                    </tr>
                    <tr>
                        <td>社会人</td>
                        <td>
                            仕事に忙殺されながらもヴァイスシュヴァルツだけは続けている。
                            <br />弟の影響でyoutubeを暇さえあればあさる。ブライアン、へきトラハウス、ポッキーが好き。
                            <br />最近はフリースタイルダンジョン等の日本語ラップにハマっている。
                            <br />スプラトゥーンを勧められてしまったので、休みの日は徹ゲーしている。
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </article>
        <article>
            <h2>Recently Instagram Photos</h2>
            <div class="box alt">
                <div class="row gtr-50 gtr-uniform">
                    <div class="col-4" v-for="image in images">
                        <span class="image fit">
                            <a target="_blank" :href="image.post_url">
                                <img :src="image.post_image_url" alt="">
                                <blockquote class="with-photo">{{ image.text }}<br />{{ image.posted_at }}</blockquote>
                            </a>
                        </span>
                    </div>
                </div>
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
        name: "Private",
        data() {
            return {
                'images': []
            }
        },
        mounted() {
            this.fetchInstagramImages()
        },
        methods: {
            fetchInstagramImages() {
                let apiName = '/get-instagram-images';

                axios.get(apiName).then((res) => {
                    this.images = res.data;
                }).catch(res => {

                });
            },
        }
    }
</script>

<style scoped>

</style>