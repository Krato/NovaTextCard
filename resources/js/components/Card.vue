<template>
    <card class="card flex flex-col  justify-center" :class="cardClassList" :style="cardStyle">
        <div class="px-3 py-3">
            <template v-if="!card.headingRaw">
                <h1 class="text-3xl text-80 font-light" :class="textClassList" v-if="card.heading">{{ card.heading }}</h1>
            </template>
            <div v-else v-html="card.heading"></div>

            <template v-if="!card.textRaw">
                <p class="text-80 font-light mt-2" v-if="card.text">{{ card.text }}</p>
            </template>
            <div v-else v-html="card.text"></div>
        </div>
    </card>
</template>

<script>
export default {
    props: ['card'],

    methods: {
        fixPixels(pixels) {
            if (pixels == 'auto') {
                return 'auto';
            }

            return pixels == 'default' ? '' : parseInt(pixels, 10) + 'px';
        },
    },

    computed: {
        textClassList() {
            return this.card.center ? 'text-center' : '';
        },

        cardClassList() {
            return this.cardCenter + ' ' + this.textClassList;
        },

        cardStyle() {
            return {
                height: this.card.height ? this.fixPixels(this.card.height) : 'auto',
            };
        },

        cardCenter() {
            return this.card.center ? 'items-center' : '';
        },
    },

    mounted() {
        if (this.card.forceFullWidth) {
            this.$parent.$el.classList.remove('w-5/6');
            this.$parent.$el.classList.add('w-full');
        }
    },
};
</script>
