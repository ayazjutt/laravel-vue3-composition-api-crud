<template>
    <section class="section-p1">
        <div class="get-started">
            <h3>Ready to get started?</h3>
            <p>Choose a plan tailored to your needs</p>
            <div class="gs-inner">
                <p>Monthly</p>
                <span class="gs-discount">20% off</span>
                <label class="switch" @change="togglePrice">
                    <input type="checkbox" />
                    <span class="slider round"></span>
                </label>
                <p><b> Yearly</b></p>
            </div>
        </div>

        <div class="container section-m1">
            <PackageCard :packages="packages" :isMonthly="isMonthly" />
        </div>
    </section>
</template>

<script>
    import usePackages from '../../composables/packages'
    import { onMounted, ref } from 'vue'
    import PackageCard from './common/packageCard.vue'
    export default {
        components: {PackageCard},
        setup() {
            const { packages, getPackages } = usePackages()
            let isMonthly = ref(true)

            onMounted(getPackages)

            const togglePrice = () => {
                isMonthly.value = !isMonthly.value
            }

            return {
                packages,
                isMonthly,
                togglePrice,
            }
        }
    }
</script>
