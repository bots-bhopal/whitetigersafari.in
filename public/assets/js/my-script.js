// Copy Button Tooltip

    //Initialize Tooltip
    $('[data-toggle=tooltip]').tooltip();

    $('.copy-button').tooltip({
        trigger: 'click',
        placement: 'bottom'
    });

    function setTooltip(btn, message) {
        $(btn).tooltip('hide')
            .attr('data-original-title', message)
            .tooltip('show');
    }

    function disposeTooltip(btn) {
        $(btn).on('mouseout', function (){
            $(btn).css({ 'color': '#fff', 'background-color' : '#17a2b8', 'border-color' : '#17a2b8', 'box-shadow' : 'none'})
            $(btn).tooltip('dispose');
        });
    }

    function showTooltip(btn, message) {
        $(btn).on('mouseover', function (){
            $(btn).css({ 'color': '#fff', 'background-color' : '#138496', 'border-color' : '#117a8b'})
            $(btn).tooltip('hide')
            .attr('data-original-title', message)
            .tooltip('show');
        });
    }

    // Clipboard
    var clipboard = new ClipboardJS('.copy-button');

    clipboard.on('success', function(e) {
        e.clearSelection();
        setTooltip(e.trigger, 'Copied !!');
        // hideTooltip(e.trigger);
        disposeTooltip(e.trigger);
        showTooltip(e.trigger, 'Copy to clipboard');
    });

    clipboard.on('error', function(e) {
        e.clearSelection();
        setTooltip(e.trigger, "Whoop's, unable to copy !!");
        // hideTooltip(e.trigger);
        disposeTooltip(e.trigger);
        showTooltip(e.trigger, 'Copy to clipboard');
    });


// End Copy Button Tooltip


// Custom Input Form
    $('input[type="file"]').change(function (e) {
        var files = [];
        for (var i = 0; i < $(this)[0].files.length; i++) {
            files.push($(this)[0].files[i].name);
            var label = $(this)[0].files[i].name;
        }

        if(files == '')
        {
            $(this).next('.custom-file-label').html('Choose File');
        }
        else
        {
            if (files.length > 1) {
                label =  label + " and <b>" + String(files.length - 1) + "</b> <b>More Files.....</b>"
            }
            $(this).next('.custom-file-label').html(label);
        }
    });

// End Custom Input Form
