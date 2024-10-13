<x-admin.layouts.admin-app>
    <x-slot:css>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/theme/dracula.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/hint/show-hint.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/htmlmixed/htmlmixed.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/css/css.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/hint/show-hint.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/hint/html-hint.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/hint/css-hint.min.js"></script>
        <style>
            .CodeMirror {
                height: 100%;
                font-size: 14px;
            }
            .editor-container {
                display: flex;
                flex-direction: column;
                height: calc(50% - 1rem);
            }
            .editor-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0.5rem;
                background-color: #282a36;
                color: #f8f8f2;
                border-top-left-radius: 0.375rem;
                border-top-right-radius: 0.375rem;
            }
            .preview-container {
                display: flex;
                flex-direction: column;
                height: 100%;
            }
            .preview-header {
                padding: 0.5rem;
                background-color: #282a36;
                color: #f8f8f2;
                border-top-left-radius: 0.375rem;
                border-top-right-radius: 0.375rem;
            }
        </style>
    </x-slot:css>
    <div x-data="templateEditor()" x-init="initEditors()" class="flex h-screen p-4 gap-4">
        <!-- Code Editors -->
        <div class="w-1/2 flex flex-col gap-4">
            <div class="editor-container">
                <div class="editor-header">
                    <h2 class="text-lg font-semibold">HTML Editor</h2>
                    <span class="text-sm">Press Ctrl+Space for suggestions</span>
                </div>
                <div id="html-editor" class="flex-grow border-l border-r border-b rounded-b-lg"></div>
            </div>
            <div class="editor-container">
                <div class="editor-header">
                    <h2 class="text-lg font-semibold">CSS Editor</h2>
                    <span class="text-sm">Press Ctrl+Space for suggestions</span>
                </div>
                <div id="css-editor" class="flex-grow border-l border-r border-b rounded-b-lg"></div>
            </div>
            <div class="mt-2">
                <button @click="createExternalCssFile()" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded transition duration-300">Create External CSS File</button>
                <input x-model="externalCssPath" class="mt-2 w-full p-2 border rounded bg-gray-100" readonly placeholder="External CSS file path will appear here">
            </div>
        </div>

        <!-- Preview -->
        <div class="w-1/2 preview-container">
            <div class="preview-header">
                <h2 class="text-lg font-semibold">Preview</h2>
            </div>
            <div class="flex-grow border-l border-r border-b rounded-b-lg bg-white overflow-auto">
                <iframe id="preview-frame" class="w-full h-full border-none"></iframe>
            </div>
        </div>
    </div>

    <script>
        function templateEditor() {
            return {
                htmlEditor: null,
                cssEditor: null,
                externalCssPath: '',
                initEditors() {
                    this.htmlEditor = CodeMirror(document.getElementById('html-editor'), {
                        mode: 'htmlmixed',
                        theme: 'dracula',
                        lineNumbers: true,
                        autoCloseTags: true,
                        autoCloseBrackets: true,
                        tabSize: 2,
                        extraKeys: {"Ctrl-Space": "autocomplete"}
                    });
                    this.htmlEditor.on('change', () => this.updatePreview());

                    this.cssEditor = CodeMirror(document.getElementById('css-editor'), {
                        mode: 'css',
                        theme: 'dracula',
                        lineNumbers: true,
                        autoCloseBrackets: true,
                        tabSize: 2,
                        extraKeys: {"Ctrl-Space": "autocomplete"}
                    });
                    this.cssEditor.on('change', () => this.updatePreview());

                    // Set initial content
                    this.htmlEditor.setValue('<h1>Hello, World!</h1>\n<p>Start editing to see the preview update.</p>');
                    this.cssEditor.setValue('body {\n  font-family: Arial, sans-serif;\n  line-height: 1.6;\n  color: #333;\n}\n\nh1 {\n  color: #4a5568;\n}');
                },
                updatePreview() {
                    const frame = document.getElementById('preview-frame');
                    const frameDoc = frame.contentDocument || frame.contentWindow.document;
                    frameDoc.open();
                    frameDoc.write(`
                        <!DOCTYPE html>
                        <html>
                            <head>
                                <style>${this.cssEditor.getValue()}</style>
                            </head>
                            <body>${this.htmlEditor.getValue()}</body>
                        </html>
                    `);
                    frameDoc.close();
                },
                createExternalCssFile() {
                    this.externalCssPath = '/css/template-' + Date.now() + '.css';
                    // Here you would typically send the CSS to the server to create the file
                    // For this example, we're just updating the path
                }
            }
        }
    </script>
</x-admin.layouts.admin-app>
