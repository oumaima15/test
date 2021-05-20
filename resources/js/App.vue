<template>
    <main>
        <Header  />
           
          <div id="layoutSidenav">
           
            <Sidebar />  
            <div id="layoutSidenav_content" >
                <h1>hello</h1>
                <Footer />
            </div>
         </div> 
                       
 
        
    </main>
</template>


<script>
import Header from "./components/Header.vue";
import Sidebar from "./components/Sidebar.vue";
import Footer from "./components/Footer.vue";

export default {
  components: {
    Header,
    Sidebar,
    Footer,
  },
};
</script>
