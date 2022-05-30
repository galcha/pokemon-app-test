<script>
import axios from 'axios'

export default {
    data() {
        return {
            pokemon: []
        }
    },
    mounted () {
        axios
        .get('/api/pokemon')
        .then(response => (this.pokemon = response['data']['data']))
    }
}
</script>

<template>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 g-3">
                <div v-for="p in pokemon" class="col">
                    <div class="card shadow-sm bg-card" :class="p.types.split(',')">
                        <img :src="p.sprite" alt="">

                        <div class="card-body">
                            #{{p.pokemon_id}}
                            <h3>{{p.name}}</h3>
                            
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <router-link :to="'/pokemon/'+p.id"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></router-link>
                                </div>
                                <small class="text-muted">{{p.types}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>