/* Override default submit function */
Joomla.submitform = function (task, form) {
    if (typeof (form) === 'undefined' || form === null) {
        form = document.adminForm;
    }
    
    if (typeof (task) !== 'undefined') {
        form.task.value = task;
    }

    if (typeof form.onsubmit === 'function') {
        form.onsubmit();
    }
    
    if (typeof form.fireEvent === "function") {
        form.fireEvent('submit');
    }

    zo2.layoutbuilder.updateJson();
    form.submit();
};