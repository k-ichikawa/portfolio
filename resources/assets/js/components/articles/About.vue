<template>
    <div id="main">
        <div class="articleBox">
            <article>
                <img :src="about_image" alt="">
                <h1>ABOUT</h1>
                <div class="explain">
                    <h2>icchy</h2>
                    <p class="sentence">93年2月生, B型, 千葉県出身, 神奈川県在住</p>
                    <p class="sentence">"イッチー", "ケンシロー"などと呼ばれている。webエンジニア</p>

                    <h2>Skill</h2>
                    <p class="sentence">Work：PHP（Laravel）, javascript（Vue, jQuery）</p>
                    <p class="sentence">Hobby：Ruby（Rails）, Google Apps Script</p>
                </div>
            </article>
        </div>
    </div>
</template>

<script>
    export default {
        name: "About",
        data () {
            return {
                about_image: require("../../../../images/about_image.jpg")
            }
        }
    }
</script>