var countDownEndDate = '1 December 2018';  // specify your count down timer here
$('.countdown').final_countdown({
    start : new Date().getTime() / 1000,
    end   : new Date(countDownEndDate).getTime() / 1000,
    now   : new Date().getTime() / 1000,
    seconds: {
    borderColor: '#5677fc',
    borderWidth: '3'
},
minutes: {
    borderColor: '#7e57c2',
    borderWidth: '3'
},
hours: {
    borderColor: '#4db6ac',
    borderWidth: '3'
},
days: {
    borderColor: '#d81b60',
    borderWidth: '3'
}}, function() {
});