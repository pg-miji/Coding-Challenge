/**
 * One of the roles of the state is to distribute the budget of the country by examining the budget requests of various provinces.
 * The total national budget is fixed so it may be difficult to allocate all budget requests.
 * So we allocate the largest total budget possible, below the total amount, in the following way:
 *
 * 1. If all requests can be allocated, the requested amount will be allocated.
 * 2. If all requests cannot be allocated, a certain integer upper limit is calculated and all higher budget requests are assigned an upper limit.
 *    Budget requests up to and including the upper limit will be allocated.
 */
var requests = [120, 110, 140, 150];
var nationalBudget = 485;
console.log('Budget limit is '+getBudgetLimit(requests, nationalBudget));

/**
 * @param {Number} requests
 * @param {Number} nationalBudget
 * @returns {Number}
 */
function getBudgetLimit(requests, nationalBudget)
{
    var limit = Math.max.apply(null, requests);
    var totalRequestBudget = requests.reduce((a,x) => a+=x,0);

    if(totalRequestBudget > nationalBudget){
        var average =  parseInt(nationalBudget / requests.length);
        var belowAverageAmount = 0;
        var aboveAverageCount = 0;

        requests.forEach(function(budget) {
            if(budget <= average){
                belowAverageAmount += budget;
            } else {
                aboveAverageCount += 1;
            }
        });

        if(aboveAverageCount > 0 && belowAverageAmount > 0){
            limit = parseInt((nationalBudget - belowAverageAmount) / aboveAverageCount);
        } else {
            limit = average;
        }
    }

    return limit;
}