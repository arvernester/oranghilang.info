<template>
  <div>
    <ul v-if="provinces.data" class="categories-list">
      <li v-for="province in provinces.data.data" :key="province.slug">
        <a @click.prevent="filterLocation(province.slug)" href="#">
          {{ province.name }} <span class="category-counter">(0)</span>
        </a>
      </li>

    </ul>
    <div class="text-center mb-4">
      <!-- <a href="" class="">Load More</a> -->
      <a v-if="provinces.data && provinces.data.next_page_url" href="#" @click.prevent="load(provinces.data.next_page_url)">Load More</a>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Location',

  data () {
    return {
      provinces: {},
    }
  },

  created () {
    this.getProvinces()
  },

  methods: {
    async getProvinces () {
      this.provinces = await axios.get('/service/province')
    },

    load (url) {
      axios.get(url)
        .then(response => {
          this.provinces.data.data.push(...response.data.data)
          this.provinces.data.next_page_url = response.data.next_page_url
        })
    },

    filterLocation (slug) {
      
    }
  }
}
</script>
