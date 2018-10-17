<template>
    <div id="main">
        <div class="contentBox">
            <div class="content">
                <img class="profileImage" :src="profile_image" alt="">
            </div>
        </div>
        <div class="overviewBox">
            <div class="overview1">
                <div class="overviewContent">
                    <a href="/about">
                        <i class="fas fa-user-alt"></i>
                        <h1>ABOUT</h1>
                        <p>私についての概要</p>
                    </a>
                </div>
            </div>
            <div class="overview2">
                <div class="overviewContent">
                    <a href="/history">
                        <i class="fas fa-laptop"></i>
                        <h1>HISTORY</h1>
                        <p>学歴・職歴</p>
                    </a>
                </div>
            </div>
            <div class="overview3">
                <div class="overviewContent">
                    <a href="/private">
                        <i class="fas fa-gamepad"></i>
                        <h1>PRIVATE</h1>
                        <p>プライベートの略歴</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="newsListBox">
            <div class="overNews">
                <div class="news">
                    <ul>
                        <h1>NEWS</h1>
                        <li>
                            <a href="/" target="_blank">
                                <time datetime="2018-10-17">10/17</time>
                                <div class="newsTitle">当サイトのUIをリニューアルしました。</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://icchy.hatenadiary.jp/entry/2018/10/14/220740" target="_blank">
                                <time datetime="2018-10-14">10/14</time>
                                <div class="newsTitle">ブログで近況を更新しました。</div>
                            </a>
                        </li>
                        <li>
                            <a href="/" target="_blank">
                                <time datetime="2018-10-01">10/01</time>
                                <div class="newsTitle">サイトを公開しました。</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="snsList">
                <div class="snsInfo">こちらでも更新しています。
                    <div class="triangle"></div>
                </div>
                <ul>
                    <li class="facebookBtn">
                        <a href="https://www.facebook.com/icchy.kenshiro" class="facebook" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                            Facebook
                        </a>
                    </li>
                    <li class="instagramBtn">
                        <a href="https://www.instagram.com/icchy1902/" class="instagram" target="_blank">
                            <i class="fab fa-instagram"></i>
                            Instagram
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="gitHubBtn">
                        <a href="https://github.com/k-ichikawa" class="github" target="_blank">
                            <i class="fab fa-github"></i>
                            gitHub
                        </a>
                    </li>
                    <li class="blogBtn">
                        <a href="https://icchy.hatenadiary.jp/" class="blog" target="_blank">
                            <i class="fas fa-pen-square"></i>
                            blog
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Index",
        data () {
            return {
                profile_image: require("../../../../images/profile_image.jpg")
            }
        }
    }
</script>