<template>
    <div class="relative flex items-top justify-center min-h-screen bg-white">
        <div class="flex flex-wrap w-100">
            <Navigation/>

            <div class="min-h-screen py-5 px-5" style="background: #eaf3fa; width:65%">
                <div class="content my-5 my-5">
                    <h2 class="title text-dark">Topic {{ topic.name }}</h2>
                    <h5 style="margin: 25px 0">{{ topic.description }}</h5>

                    <div class="quiz flex flex-wrap justify-center items-center p-5 m-3" style="background-color: white; z-index: 1; border-radius: 30px;">
                        <div v-if="questions.length > count">
                            <h3>{{ questions[count].question }}</h3>
                            <label
                            v-for="(answer, index) in JSON.parse(questions[count].choices)"
                            :key="index"
                            :for="index"
                            class="mt-3 border rounded-lg py-2 px-6 text-lg"
                            :class="[{'hover:bg-secondary cursor-pointer' : selectedAnswer == ''}, {'bg-success bg-opacity-75' : index == questions[count].answer && selectedAnswer != ''}, {'bg-danger bg-opacity-75' : selectedAnswer == index && index != questions[count].answer }]"
                            style="display:block"
                            >
                                <input
                                    :id="index"
                                    type="radio"
                                    class="hidden"
                                    :value="index"
                                    :disabled="selectedAnswer != ''"
                                    @change="answered($event)"
                                />
                                {{answer}}
                            </label>

                            <button
                                @click="nextQuestion"
                                v-show="selectedAnswer != ''"
                                class="mt-4 bg-indigo-600 text-black text-sm font-bold tracking-wide rounded-full px-5 py-2"
                            >
                                Next &gt;
                            </button>
                        </div>
                        <div v-else>

                            <h2 class="text-bold text-3xl">Results</h2>
                            <div class="flex justify-start space-x-4 mt-6">
                                <h5>Correct Answers:
                                <span class="text-2xl text-green-700 font-bold">{{correctAnswers}}</span></h5>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            
            <Sidebar/>
        </div>
    </div>
</template>

<script>
    import Sidebar from './common/Sidebar.vue';
    import Navigation from './common/Navigation.vue';
    export default {
        name: 'Topic',
        components: {
            Sidebar,
            Navigation
        },
        data(){
            return{
                topic: { type: Object, default: () => ({}) },
                questions: { type: Object, default: () => ({}) },
                count: 0,
                selectedAnswer: '',
                correctAnswers: 0
            }
        },
        mounted(){
            axios.get('/api/topics/' + this.$route.params.topic_id).then((res)=>{
                this.topic = res.data
            });

            axios.get('/api/questions/' + this.$route.params.topic_id).then((res)=>{
                this.questions = res.data
            });

        },
        methods: {
            answered(e) {
                this.selectedAnswer = e.target.value;

                if (this.selectedAnswer == this.questions[this.count].answer) {
                    this.correctAnswers++;
                    console.log('correct answer');
                } else {
                    //this.wrongAnswers++;
                    console.log('wrong answer');
                }
            },
            nextQuestion() {
                this.count++;
                this.selectedAnswer = '';
                document.querySelectorAll("input").forEach((el) => (el.checked = false));
            }
        }
    }
</script>