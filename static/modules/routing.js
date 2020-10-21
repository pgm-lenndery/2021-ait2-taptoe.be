const pathCallback = (path, baseurl = '') => {
    const location = decodeURI(window.location.pathname);
    baseurl = decodeURI(baseurl);
    path.replace(baseurl, '');
    if (!path.startsWith('/')) path = `/${path}`;
    if (!path.endsWith('/')) path += '/'
    
    return (callback) => {
        if (`/${baseurl}${path}` == location) callback(path);
    }
}


export {
    pathCallback 
};