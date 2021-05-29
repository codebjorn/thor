import {__} from '@wordpress/i18n';
import {Fragment} from '@wordpress/element';

import Controls from "./components/controls";
import Editor from "./components/editor";
import Inspector from "./components/inspector";
import * as attributes from "./data/attributes.json";

const {registerBlockType} = wp.blocks;

export default registerBlockType('thor-hero/hero', {
    title: __('Hero', 'hero'),
    attributes: attributes,
    edit: props => {
        return (
            <Fragment>
                <Controls {...props} />
                <Editor {...props} />
                <Inspector {...props} />
            </Fragment>
        );
    },
    save() {
        //gutenberg will save attributes we can use in server-side callback
        return null;
    },
});
