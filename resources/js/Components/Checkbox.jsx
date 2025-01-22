export default function Checkbox({ className = '', ...props }) {
    return (
        <input
            {...props}
            type="checkbox"
            className={
                ' checkbox checkbox-sm checkbox-primary ' +
                className
            }
        />
    );
}
