<template>
    <div id="main">
        <section class="posts">
            <article>
                <header>
                    <span class="date">2016/04 ~ 2016/12</span>
                    <h2>
                        <a href="https://cp.monipla.com/">monipla</a>
                    </h2>
                </header>
                <h3>ユーザーグロース</h3>
                <p>キャンペーン参加者数を改善開発により150,000/月↑<br />（通常参加数 1,500,000/月）<br /><br /></p>
                <a href="https://cp.monipla.com/" class="image fit"><img :src="work_image_01" alt="work_image_01"></a>
            </article>
            <article>
                <header>
                    <span class="date">2017/01 ~ 2017/07</span>
                    <h2>
                        <a href="https://cp.monipla.com/">monipla</a>
                    </h2>
                </header>
                <h3>新規機能開発</h3>
                <p>iframeタグを企業のオウンドサイトへ埋め込む事で
                    <br />ユーザーがコメントを投稿できるプラグインを開発。
                    <br />10~20社の導入実績あり。
                </p>
                <a href="https://cp.monipla.com/" class="image fit"><img :src="work_image_03" alt="work_image_03"></a>
            </article>
            <article>
                <header>
                    <span class="date">2017/08 ~ 2018/03</span>
                    <h2>
                        <a href="https://cp.monipla.com/">monipla</a>
                    </h2>
                </header>
                <h3>システム運用・保守</h3>
                <p>モニプラにおける社内外からの問い合わせに対応。
                    <br />およびバグ・障害対応。
                    <br />100件/月 の問い合わせを改善開発により 70件/月 まで削減
                </p>
            </article>
            <article>
                <header>
                    <span class="date">2018/04 ~ </span>
                    <h2>
                        <a href="https://www.aainc.co.jp/service/brandtouch/">brand touch</a>
                    </h2>
                </header>
                <h3>新規サービス開発</h3>
                <p>新規サービス立ち上げ、管理画面開発をメインで担当。
                    <br />Vue.jsを初めて導入し、短納期で開発
                    <br />
                    <br />
                </p>
                <a href="https://www.aainc.co.jp/service/brandtouch/" target="_blank" class="image fit"><img :src="work_image_04" alt="work_image_02"></a>
            </article>
        </section>
    </div>
</template>

<script>
    export default {
        name: "Works",
        data () {
            return {
                work_image_01: require("../../../../images/monipla.jpg"),
                work_image_02: require("../../../../images/comment_plugin_01.jpg"),
                work_image_03: require("../../../../images/comment_plugin_01.jpg"),
                work_image_04: require("../../../../images/brand_touch.jpg"),
            }
        }
    }
</script>

<style scoped>

</style>