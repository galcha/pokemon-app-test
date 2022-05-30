<script>
export default {
    data() {
        return {
            pokemon: {}
        }
    },
    created() {
        axios
            .get('/api/pokemon/' + this.$route.params.id)
            .then(response => (this.pokemon = response['data']['data']))
    }
}
</script>

<template>
    <div class="album py-5 bg-light">
        <div class="container">
            <router-link to="/"><div class="mb-2"><i class="bi-arrow-left mr-2"></i>Back to list</div></router-link>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Sprite</div>
                        <div class="card-body text-center">
                            <img class="img-account-profile rounded-circle mb-2" :src="pokemon.sprite" alt="" style="width: 100%">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Pokemon Details</div>
                        <div class="card-body">
                            <table style="width:100%">
                                <tr>
                                    <th>Name</th>
                                    <td>{{pokemon.name}}</td>
                                </tr>
                                <tr>
                                    <th>Pokedex ID</th>
                                    <td>{{pokemon.pokemon_id}}</td>
                                </tr>
                                <tr>
                                    <th>Types</th>
                                    <td>{{pokemon.types}}</td>
                                </tr>
                                <tr>
                                    <th>Weight</th>
                                    <td>{{pokemon.weight}}</td>
                                </tr>
                                <tr>
                                    <th>Height</th>
                                    <td>{{pokemon.height}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>