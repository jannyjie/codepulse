<?php include('header.php'); ?>
<div class="pagecont border-top pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
            <li class="breadcrumb-item active"><a href="timeline.php">時間軸輪播</a></li>
        </ol>
    </div>
    <section>
        <div class="container mt-5 mb-5">
            <div class="historyArea" id="timeline">
                <ul class="historyGroupList">
                    <li v-for="li in list">
                        <div class="topBox">
                            <div v-for="(oddItem, index) in li" v-if="index%2 != 1" :key="oddItem.id" class="item">
                                <div class="txt wow animated fadeIn slow" data-wow-delay="0.85s">
                                    <h3 class="wow animated fadeInUp slow" data-wow-delay="1.2s">{{ oddItem.year }}</h3>
                                    <div class="text-des wow animated fadeInDown slow" data-wow-delay="1.5s">
                                        <p>{{ oddItem.description1 }}</p>
                                        <p>{{ oddItem.description2 }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottomBox">
                            <div v-for="(evenItem, index) in li" v-if="index%2 != 0" :key="evenItem.id" class="item">
                                <div class="txt wow animated fadeIn slow" data-wow-delay="0.85s">
                                    <h3 class="wow animated fadeInUp slow" data-wow-delay="1.2s">{{ evenItem.year }}</h3>
                                    <div class="text-des wow animated fadeInDown slow" data-wow-delay="1.5s">
                                        <p>{{ evenItem.description1 }}</p>
                                        <p>{{ evenItem.description2 }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="historyList">
                    <li v-for="li in history">
                        <div class="item">
                            <div class="txt wow animated fadeIn slow">
                                <h3 class="wow animated fadeInUp slow">{{ li.year }}</h3>
                                <div class="text-des wow animated fadeInDown slow">
                                    <p>{{ li.description1 }}</p>
                                    <p>{{ li.description2 }}</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>
<?php include('footer.php'); ?>  

<script type="text/javascript">
var app = new Vue({
    el: '#timeline',
    data: () => ({
        history: <?= json_encode($timeline) ?>,
        list: []
    }),
    methods: {
        sortItem(){
            this.list = _.chunk(this.history, 5);
        }
    },
    mounted() {
        this.sortItem();
    }
})
</script>