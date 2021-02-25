function surveyData() {
    return {
        debug: {},
        questionnaire: window.questionnaire,
        pricingModels: window.pricingModels,
        excluded: {},
        preismodell: {},
        factors: {},
        tooltips: {},
        saveAnswers: function (result) {
            fetch('actions/saveResults.php', {
                method: 'post',
                body: JSON.stringify({"results": result.data})
            }).then(r => r.json())
                .then(json => {
                    this.preismodell = json.preismodell;
                    this.factors = json.factors;
                    this.excluded = json.excluded;
                })
        },
        init: function () {
            var json = this.questionnaire;

            if(Object.keys(this.debug).length > 0) {
                this.preismodell = this.debug.preismodell;
                this.factors = this.debug.factors;
                this.excluded = this.debug.excluded;
            }

            Survey.StylesManager.applyTheme("default");

            window.survey = new Survey.Model(json);
            survey.onComplete.add(result => {

                this.saveAnswers(result);
            });

            survey.onValueChanged.add((sender, options) => {
                if(options.question.isReadOnly) {
                    return;
                }
                var questions = sender.getAllQuestions();
                questions.forEach(function(question) {
                    if(question.isReadOnly) {
                        question.clearValue();
                    }
                })
            })


            $("#surveyElement").Survey({
                model: survey
            });
        }
    }
}