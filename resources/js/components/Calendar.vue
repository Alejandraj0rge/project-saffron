<template>
				<div class="card" style="display:flex;justify-content:start;margin:10px">
					<div style="display: flex;padding:20px">
						<div>Today <h2>{{date.toDateString()}}</h2></div>
						<span class="material-icons">expand_more</span>
					</div>
					<div style="display: flex; justify-content:center">
                        <div class="card date-card" @click="(e) => showEvents(e)" style="padding: 5px;margin:10px;width: 51px;" v-for="(date, index) in dateList">
                            <div style="text-align:center">{{getWeekDay(new Date(date)).substring(0,3).toUpperCase()}}</div><h2 style="text-align: center;">{{(new Date(date)).getDate()}}</h2>
                        </div>
					</div>
					<div style="display: flex;padding:20px" v-for="(event, index) in eventList">
						<div style="display: flex;flex-direction:column;justify-content:space-between">
							<div>{{event.start_time}}</div>
							<div>{{event.end_time}}</div>
						</div>
						<div id="calendar-event" class ="green-event">
							<div style="margin-left:10px;">
								<div style="font-weight:bold">{{event.title}}</div>
								<div>{{event.subtitle}}</div>
								<div  style="font-weight:light">{{event.content}}</div>
							</div>
						</div>
					</div>
				</div>
</template>

<script>
    export default {
        data() {
            var dateList = [];

            var date = new Date();

            for (let adder = 0; adder < 4; adder++) {
                dateList = dateList.concat([date.setDate(date.getDate() + adder)]);
            };

            return {
                dateList: dateList,
                date: new Date(),
                eventList: this.events
            }
        },
        methods:{
            getWeekDay(d) {
                var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                return weekday[d.getDay()];
            },
            showEvents(e){
                console.log(e);
                e.target.parentElement.style.backgroundColor = 'blue';
            }
        },
        props: ['events']
    }
</script>
