import { ref } from 'vue'
import axios from 'axios'

export default function UsePackages() {
    const packages = ref([])

    const getPackages = async () => {
        let response = await axios.get('/api/packages')
        packages.value = response.data.data;
    }

    return {
        packages,
        getPackages
    }
}
