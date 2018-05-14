import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    render() {
        return (
            <article className="message">
                <div className="message-header">
                    <p>Hello World!</p>
                    <button className="delete" aria-label="delete"></button>
                </div>
                <div className="message-body">
                    I'm a <strong>React</strong> component! Tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet
                    fringilla.
                </div>
            </article>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
