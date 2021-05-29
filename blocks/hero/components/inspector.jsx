import {__} from '@wordpress/i18n';
import {InspectorControls} from '@wordpress/block-editor';
import {PanelBody, PanelRow} from '@wordpress/components';

function Inspector({attributes, setAttributes}) {
    return (
        <InspectorControls>
            <PanelBody title={__('Hero')}>
                <PanelRow>

                </PanelRow>
            </PanelBody>
        </InspectorControls>
    );
}

export default Inspector;