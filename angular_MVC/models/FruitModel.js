/**
 * This model receives the command and executes the retrieval of the data
 */
helloWorldApp.service('FruitModel', function () {
    this.getData = function () {
        return ['Apple', 'Banana', 'Orange', 'Grapes', 'Tomato', 'Watermelon'];
    };
});

/**
 * The model notifies the controller and the view that its state has changed
 */