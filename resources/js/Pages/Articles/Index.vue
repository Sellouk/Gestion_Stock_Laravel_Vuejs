<template>
<AppLayout>
<h1>Articles</h1>
<div class="overflow-x-auto relative">
 <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

        <tr>
            <th>
                Name
            </th>
            <th>
                Marque
            </th>
            <th>
                Reference
            </th>
            <th>
                Prix Achat
            </th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="article in articles" :key="article" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td>
                 {{article.nom}}
            </td>
                        <td>
                 {{article.marque}}
            </td>
                        <td>
                 {{article.reference}}
            </td>
                        <td>
                 {{article.prixAchat}}
            </td>
            <td class="py-4 px-6">
                <Link :href="route('articles.show',article.id)" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"> Show </Link>
                <Link :href="route('articles.edit',article.id)" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</Link>
                <Button @click="destroy(article.id)" type="button">Destroy</Button>
            </td>
        

        </tr>
    </tbody>
 </table>
  </div>
 <div class="mb-6">
   <Link href="/articles/create" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter Article</Link>
 </div>
</AppLayout>
</template>



<script>
import {Link} from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import { useForm } from '@inertiajs/inertia-vue3'
import {Inertia} from '@inertiajs/inertia'
 export default{
    props:['articles'],
    setup(){
        const destroy =(id)=>{
            if(confirm('Confirmer Supression')){
                Inertia.delete(route('articles.destroy',id))
            }
        }
        return{destroy}
    },

    components:{ Link, AppLayout }
}




</script>