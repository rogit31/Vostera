$(document).ready(function() {
    tinymce.init({
        selector: 'textarea.textEditors',
        height: '600px',
        plugins: 'anchor charmap codesample image link lists table visualblocks wordcount media',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | spellcheckdialog typography | align lineheight | checklist numlist bullist indent outdent | removeformat',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ],
        setup: function(editor) {
            editor.on('input', function() {
                handleEditorInput(editor.getContent());
            });
        }
    });
});

const searchResultsContainer = $('#searchResultsInline');

function handleEditorInput(content) {
    const regex = /@(\w+)/g;
    let match;

    searchResultsContainer.html('');
    while ((match = regex.exec(content)) !== null) {
        const keyword = match[1];
        fetchArticles(keyword);
    }
}

function fetchArticles(keyword) {
    if (keyword.length < 2) {
        searchResultsContainer.hide();
    } else {
        searchResultsContainer.show();
        $.ajax({
            url: "/articleLivesearch",
            method: 'POST',
            data: { input: keyword },
            success: function(data) {
                searchResultsContainer.html(data);
                $('.inlineSearchResult').on('click', function(e) {
                    e.preventDefault();
                    const href = $(this).attr('href');
                    const title = $(this).text();
                    insertLinkIntoEditor(href, title, keyword);
                    searchResultsContainer.html('').hide();
                });
            },
            error: function(xhr, status, error) {
                console.error("Failed to fetch articles. " + error);
            }
        });
    }
}

function insertLinkIntoEditor(href, title, keyword) {
    const editor = tinymce.activeEditor;
    const content = editor.getContent({ format: 'html' });
    const keywordRegex = new RegExp('@' + keyword, 'g');

    // Find the position of the keyword
    const match = keywordRegex.exec(content);
    if (match) {
        const keywordText = match[0];
        const replaceText = `<a href="${href}">${title}</a>&nbsp;`; // Added non-breaking space to move the cursor

        // Replace the @keyword with the link
        const newContent = content.replace(keywordText, replaceText);
        editor.setContent(newContent);

        // Move the cursor after the inserted link
        const node = editor.dom.select('a[href="' + href + '"]')[0];
        if (node) {
            editor.selection.select(node.nextSibling);
            editor.selection.collapse(true);
        }

        editor.focus();
    }
}
