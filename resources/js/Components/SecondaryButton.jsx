export default function SecondaryButton({
    type = 'button',
    className = '',
    disabled,
    children,
    ...props
}) {
    return (
        <button
            {...props}
            type={type}
            className={
                `me-3 btn btn-info text-white` + className
            }
            disabled={disabled}
        >
            {children}
        </button>
    );
}
