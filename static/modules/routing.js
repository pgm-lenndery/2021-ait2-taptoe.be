const pathCallback = (path, baseurl = '') => {
    const inputType = typeof path;
    const newPath = inputType == 'string' ? [path] : path;
    const location = decodeURI(window.location.pathname);
    baseurl = decodeURI(baseurl);
    
    const paths = newPath.map(p => {
        p.replace(baseurl, '');
        if (!p.startsWith('/')) p = `/${p}`;
        if (!p.endsWith('/')) p += '/'
        return p;
    })
    
    const checks = paths.some(p => `/${baseurl}${p}` == location)
    
    return (callback) => {
        if (checks) callback(path);
    }
}


export {
    pathCallback 
};