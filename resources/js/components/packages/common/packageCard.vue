<template>
    <div class="column" v-for="item in packages">
        <div class="price-table">
            <h4>{{ item.title }}</h4>
            <span class="popular" v-if="item.is_popular">popular</span>
            <p>{{ item.description }}</p>
            <div class="price_tag">
              <span>
                <span class="sign">$</span>
                <span class="currency" v-if="isMonthly === true">{{ item.price_per_month }}</span>
                <span class="currency" v-else>{{ item.price_per_annum }}</span>
                <span class="month" v-if="isMonthly === true">per seat/month</span>
                <span class="month" v-else>per seat/year</span>

              </span>
            </div>
            <button class="w-full">try 7 days for free</button>
            <div class="price-list">
                <p>lite includes:</p>
                <ul>
                    <li v-for="feature in item.features">{{ feature.title }} <span v-if="feature.status === 'Beta'">beta</span></li>
                </ul>
            </div>
        </div>
        <div class="price-features">
            <p>See all features </p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['packages', 'isMonthly']
    }
</script>
