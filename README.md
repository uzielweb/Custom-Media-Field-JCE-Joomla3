### CustomMedia - Campo personalizado para seleção de mídia (Joomla)

**Descrição (Português):**

O CustomMedia é um campo personalizado para seleção de mídia, desenvolvido para utilização no Joomla. Ele permite aos usuários escolherem mídias, como imagens ou vídeos, de forma fácil e intuitiva dentro do ambiente do Joomla. O campo é especialmente útil quando se deseja adicionar funcionalidades de seleção de mídia em formulários personalizados.

Características principais:

- Compatível com o Joomla.
- Suporta o popular editor JCE, caso esteja instalado.
- Oferece uma experiência de seleção de mídia simplificada.
- Permite selecionar e exibir mídias de diferentes tipos, como imagens e vídeos.
- Fácil integração com formulários personalizados.

**Instruções de uso:**

1. Faça o download do pacote do CustomMedia e extraia os arquivos em uma pasta no diretório de extensões do Joomla.
2. Acesse o painel de administração do Joomla e vá para a seção "Gerenciador de Extensões".
3. Na guia "Instalar", clique em "Fazer Upload de Arquivo" e selecione o arquivo ZIP do CustomMedia.
4. Após a instalação bem-sucedida, vá para a seção "Gerenciador de Campos Personalizados" no painel de administração.
5. Crie um novo campo personalizado e selecione "CustomMedia" como o tipo de campo.
6. Configure as opções do campo, como rótulo, tamanho, tipo de mídia permitida, etc.
7. Adicione o campo personalizado ao seu formulário, seja através do Editor de Artigos ou de um componente personalizado.
8. Salve as alterações e visualize o formulário em seu site Joomla.

**Description (English):**

### CustomMedia - Custom Field for Media Selection (Joomla)

**Description:**

CustomMedia is a custom field for media selection, developed for use in Joomla. It allows users to choose media, such as images or videos, easily and intuitively within the Joomla environment. The field is especially useful when you want to add media selection functionality to custom forms.

Key Features:

- Compatible with Joomla.
- Supports the popular JCE editor, if installed.
- Provides a simplified media selection experience.
- Allows selection and display of different types of media, such as images and videos.
- Easy integration with custom forms.

**Usage Instructions:**

1. Download the CustomMedia package and extract the files into a folder in the Joomla extensions directory.
2. Access the Joomla administration panel and go to the "Extensions Manager" section.
3. In the "Install" tab, click on "Upload Package File" and select the CustomMedia ZIP file.
4. After a successful installation, go to the "Custom Fields Manager" section in the administration panel.
5. Create a new custom field and select "CustomMedia" as the field type.
6. Configure the field options, such as label, size, allowed media type, etc.
7. Add the custom field to your form, either through the Article Editor or a custom component.
8. Save the changes and preview the form on your Joomla website.

**Note:** The CustomMedia field requires the installation of the JCE editor for full functionality. If JCE is not installed, the field will fallback to the default Joomla media field.

*Exemplo de uso do campo CustomMedia em um formulário Joomla:*

**Exemplo de utilização (Português):**
Aqui está um exemplo de como utilizar o campo CustomMedia em um formulário Joomla:
Este exemplo demonstra a utilização do campo CustomMedia em um formulário Joomla. O campo permite selecionar uma mídia, como uma imagem ou vídeo, dentro do ambiente do Joomla. Ele é configurado como obrigatório (required) e possui uma etiqueta (label) e uma descrição (description) para orientar o usuário na seleção da mídia desejada.

**Usage example (English):**

Here is an example of how to use the Custommedia field in a Joomla form:
This example demonstrates the usage of the CustomMedia field in a Joomla form. The field allows selecting a media, such as an image or video, within the Joomla environment. It is configured as required and has a label and description to guide the user in selecting the desired media.


**Formulário XML: / XML FORM:**


```xml
<?xml version="1.0" encoding="UTF-8"?>
<form>
    <fields name="params">
        <fieldset name="custommedia_settings" label="CustomMedia Settings" description="Configure the options for the CustomMedia field.">
            <field
                name="changeit_mudeisso"
                type="custommedia"
                label="Select a media"
                description="Select an image or video."
                filter="raw"
                required="true"
            />
        </fieldset>
    </fields>
</form>
```
