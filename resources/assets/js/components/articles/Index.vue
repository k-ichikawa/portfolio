<template>
    <div id="main">
        <article>
            <h2>PROFILE</h2>
            <h3>市川 健太 (イチカワ ケンタ)</h3>
            <p>93年2月生まれ、B型、千葉県出身、神奈川県在住。<br />"イッチー", "ケンシロー"などと呼ばれている。webエンジニア。</p>
            <a href="javascript:void(0)" class="image main"><img :src="profile_image" alt="profile" /></a>
        </article>

        <article>
            <h2>BIOGRAPHY</h2>

            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2011/04 <br>~ 2016/03</td>
                        <td>専修大学<br />経営学部 経営学科</td>
                        <td>マーケティング × ITを研究するゼミに所属。趣味でサークルの立ち上げ等。<br />友人に教えてもらいながら独学でプログラミングを学ぶ。</td>
                    </tr>
                    <tr>
                        <td>2014/08 <br>~ 2015/07</td>
                        <td>株式会社ココラブル<br />インターンシップ</td>
                        <td>データ分析・企画職として入社。分析効率化のためプログラミングを勉強し実践。</td>
                    </tr>
                    <tr>
                        <td>2016/04 ~ </td>
                        <td>アライドアーキテクツ株式会社<br />エンジニア職</td>
                        <td>ユーザーグロース、システム運用、新規サービス開発に従事。</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </article>

        <article>
            <h2>SKILL</h2>
            <div class="row">
                <div class="col-6 col-12-small">
                    <h3>work</h3>
                    <ul>
                        <li>PHP（Laravel）</li>
                        <li>Vue.js</li>
                        <li>jQuery</li>
                    </ul>
                </div>
                <div class="col-6 col-12-small">
                    <h3>hobby</h3>
                    <ul>
                        <li>Ruby（Rails）</li>
                        <li>Google Apps Script</li>
                    </ul>
                </div>
            </div>
        </article>

        <article>
            <h2>BLOG</h2>
            <p><a href="https://icchy.hatenadiary.jp/" target="_blank"></a>kenta's diary</p>
            <p>テックな事、日常の事を記事にしています。</p>
        </article>
    </div>
</template>

<script>
    export default {
        name: "Index",
        data () {
            return {
                profile_image: require("../../../../images/profile.jpg")
            }
        }
    }
</script>

<style scoped>

</style>