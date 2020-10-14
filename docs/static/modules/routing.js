const pathCallback = (path) => {
    if (!path.startsWith('/')) path = `/${path}`;
    if (!path.endsWith('/')) path += '/'
    
    return (callback) => {
        if (path == window.location.pathname) callback(path);
    }
}


export {
    pathCallback 
};