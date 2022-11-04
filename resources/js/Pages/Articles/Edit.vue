<template>

<AppLayout>
  <h1>Ajouter Article</h1>

<form @submit.prevent="form.put(route('articles.update',article.id))">
  <div class="mb-6">
    <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom :</label>
    <input id="nom" v-model="form.nom"  class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
  </div>
 <div class="mb-6">
    <label for="reference" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" >Reference</label>
    <input id="reference" v-model="form.reference" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
<div class="mb-6">
    <label for="marque" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Marque </label>
    <input id="marque" v-model="form.marque" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
<div class="mb-6">
    <label for="prixAchat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prix Achat </label>
    <input id="prixAchat" v-model="form.prixAchat" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
<div class="mb-6">
    <label for="prixVente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prix Vente</label>
    <input id="prixVente" v-model="form.prixVente" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
<div class="mb-6">
    <label for="total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Total</label>
    <input id="total" v-model="form.total" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
<div class="mb-6">
    <label for="totalhtva" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">totalHtva </label>
    <input id="totalhtva" v-model="form.totalHtva" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
<div class="mb-6">
    <label for="emplacement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Emplacement</label>
    <input id="emplacement" v-model="form.emplacement" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
<div class="mb-6">
    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Type</label>
    <input id="type" v-model="form.type" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
<div class="mb-6">
    <label for="unite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Unite </label>
    <input id="unite" v-model="form.unite" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
<div class="mb-6">
    <label for="designation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Designation </label>
    <input id="designation" v-model="form.designation" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
<div class="mb-6">
    <label for="stockmin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stock Min </label>
    <input id="stockmin" v-model="form.stockMin" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
<div class="mb-6">
    <label for="stockinit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stock Initial </label>
    <input id="stockinit" v-model="form.stockInit" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
<div class="mb-6">
    <label for="niveaustock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Niveau Stock </label>
    <input id="niveaustock" v-model="form.niveauStock" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
<div class="mb-6">
    <button type="submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
    </div>
<div class="mb-6">
   <Link href="/articles" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">cancel</Link>
 </div>
</form>
</AppLayout>

</template>



<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import {useForm,Link} from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue'


export default {

    props:{
        article:Object,

    },
    setup(props) {
        const form = useForm(props.article);
        return { form };
    },
   components:{ Link, AppLayout },
}
</script>