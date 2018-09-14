<template>
    <section>
        <p>楽しい仕事・会社を探しています。採用のお話等、お待ちしております。</p>
        <form>
            <div class="fields">
                <div class="field">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="3"></textarea>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Send Message"></li>
            </ul>
        </form>
    </section>
</template>

<script>
    export default {
        name: "Contact"
    }
</script>

<style scoped>

</style>