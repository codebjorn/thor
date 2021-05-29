
function Editor({attributes, setAttributes}) {
    console.log(attributes)
    return (
        <div className="hero">
            <h1>Hello, {attributes.title}</h1>
        </div>
    );
}

export default Editor;